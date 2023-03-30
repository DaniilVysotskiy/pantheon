import { I18nService } from '#/services/i18n';
import * as React from 'react';
import { NumberInput, Text, TextInput } from '@mantine/core';
import {
  IconChartHistogram,
  IconCoins,
  IconHourglass,
  IconNumbers,
  IconUsers,
} from '@tabler/icons-react';
import { FormHandle } from '#/pages/OwnedEventsEdit/types';

type OnlineSettingsProps = {
  form: FormHandle;
  i18n: I18nService;
};

export const OnlineSettings: React.FC<OnlineSettingsProps> = ({ form, i18n }) => {
  return (
    <>
      <Text>
        {i18n._t(
          'Please note: you should set up the rating accordingly to tournament settings in Tenhou.net, otherwise expect errors on replay submit!'
        )}
      </Text>
      <TextInput
        withAsterisk
        icon={<IconUsers size='1rem' />}
        label={i18n._t('Tenhou Lobby ID')}
        {...form.getInputProps('event.tenhouLobbyId')}
      />
      <NumberInput
        {...form.getInputProps('ruleset.gameExpirationTime')}
        icon={<IconHourglass size='1rem' />}
        label={i18n._t('Game expiration time (in hours)')}
        description={i18n._t(
          'Interval of time when played online game is still considered valid and can be added to the rating. Set to 0 to disable expiration.'
        )}
        defaultValue={24}
        min={0}
      />
      <NumberInput
        {...form.getInputProps('ruleset.chipsValue')}
        icon={<IconCoins size='1rem' />}
        label={i18n._t('Chips value')}
        description={i18n._t(
          'Amount of points given for each chip. Chips should be set up in tournament settings in Tenhou.net. Set to 0 to disable chips.'
        )}
        defaultValue={2000}
        step={100}
        min={0}
      />
      <NumberInput
        {...form.getInputProps('event.gameSeriesCount')}
        icon={<IconChartHistogram size='1rem' />}
        label={i18n._t('Series length')}
        description={i18n._t(
          'Count of session in game series. Set to 0 to disable series functionality.'
        )}
        defaultValue={0}
        step={5}
        min={0}
      />
      <NumberInput
        {...form.getInputProps('event.minGamesCount')}
        icon={<IconNumbers size='1rem' />}
        label={i18n._t('Minimal games count')}
        description={i18n._t(
          'Minimal count of games the player should play to get into the rating table.'
        )}
        defaultValue={0}
        step={5}
        min={0}
      />
    </>
  );
};
