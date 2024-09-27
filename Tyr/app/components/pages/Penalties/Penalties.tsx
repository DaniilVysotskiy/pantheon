import { Button } from '../../base/Button/Button';
import BackIcon from '../../../img/icons/arrow-left.svg?react';
import styles from './Penalties.module.css';
import { useContext } from 'react';
import { i18n } from '../../i18n';
import clsx from 'classnames';
import { ErrorState } from '../../../store/interfaces';
import { Loader } from '../../base/Loader/Loader';

export const Penalties = ({
  onBackClick,
  penaltiesList,
  isLoading,
  error,
}: {
  onBackClick: () => void;
  // should be compatible with Penalty item from proto
  penaltiesList: Array<{
    amount: number;
    reason?: string | null | undefined;
    isCancelled: boolean;
  }>;
  isLoading: boolean;
  error?: ErrorState;
}) => {
  const loc = useContext(i18n);

  if (isLoading) {
    return <Loader />;
  }

  if (error) {
    return (
      <div className={styles.wrapper}>
        <Button variant='light' icon={<BackIcon />} size='lg' onClick={onBackClick} />
        <div className={styles.heading}>
          {loc._t('Failed to load penalties. Connection issues?')}
        </div>
      </div>
    );
  }

  return (
    <div className={styles.wrapper}>
      <Button variant='light' icon={<BackIcon />} size='lg' onClick={onBackClick} />
      <div className={styles.heading}>{loc._t('Your penalties in current event')}</div>
      <div className={styles.content}>
        {penaltiesList.length > 0 ? (
          penaltiesList.map((p) => (
            <div className={clsx(styles.item, p.isCancelled ? styles.itemCancelled : null)}>
              <b>-{p.amount}</b>: {p.reason}
            </div>
          ))
        ) : (
          <div className={styles.item}>{loc._t("You don't have any penalties in this event")}</div>
        )}
      </div>
    </div>
  );
};
